# searching.py
# Made by SeungJunLee(a.k.a. WATD Front-End Developer)

# You Need Requests Library
# pip install requests
import requests
import json


seoul=0
gyeunggi=0
chungcheng=0
daegu=0
incheon=0
gangwon=0
daejun=0
junla=0
gyungsang=0

def searching(school):
    global seoul
    global gyeunggi
    global chungcheng
    global daegu
    global incheon
    global gangwon
    global daejun
    global junla
    global gyungsang
    url = "https://dapi.kakao.com/v2/local/search/keyword.json"             # Kakao Map Requests URL 
    queryString = {"query":school}
    header = {'authorization':'KakaoAK kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'}   # API KEY from Kakao
    r = requests.get(url, headers=header, params=queryString)
    json_data = json.loads(r.text)
    json_doc = json_data["documents"]
    temp = "temp"
    for i in json_doc:
        json_add = i["road_address_name"]
        json_cat = i["category_name"]
        json_dis = int(i["distance"])+1
        if(json_cat == "교육,학문 > 학교 > 중학교" and json_dis <= 300000 and temp != json_add[0:7]):    # Around 300km
            locate = json_add[:2]
            if(locate == "서울"):
                seoul+=1
            elif(locate == "인천"):
                incheon+=1
            elif(locate == "강원"):
                gangwon+=1
            elif(locate == "충북" or locate == "충남"):
                chungcheng+=1
            elif(locate == "경기"):
                gyeunggi+=1
            elif(locate == "전북" or locate == "전남"):
                junla+=1
            elif(locate == "대전"):
                daejun+=1
            elif(locate == "경북" or locate == "경남"):
                gyungsang+=1
            else:
                daegu+=1
            
            temp = json_add[0:7]
            school = school.rstrip('\n')
            result = (school + ' ' + json_add + '\n')
            return result
            
print("START SEARCHING...\n")
f1 = open("FILE LOCATE", 'r')  # School List File, you need to write new locate
f2 = open("FILE LOCATE", 'w')  # Result List File, you need to write new locate
while True:
    line = f1.readline()
    if not line:
        break
    data = searching(line)
    f2.write(data)

count = "서울 : %d 경기 : %d 인천 : %d 충청 : %d 강원 : %d 대구 : %d 전라 : %d 대전 : %d 경상 : %d\n" %(seoul,gyeunggi,incheon,chungcheng,gangwon,daegu,junla,daejun,gyungsang)
print(count)
f1.close()
f2.close()

print("DONE")
