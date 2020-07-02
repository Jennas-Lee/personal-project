from urllib.parse import urlparse
import requests
import pandas as pd
import csv
import re
import folium

# f = open('src/data.csv')
# data = csv.reader(f)
# list = []
# for row in data:
#     print(row)
#     address = re.sub(r'\([^)]*\)', '', (row[0] + "역"))
#     url = "https://dapi.kakao.com/v2/local/search/keyword.json?query=" + address + "&category_group_code=sw8&size=1&x=126.9786567&y=37.566826&sort=distance"
#     result = requests.get(urlparse(url).geturl(),
#                           headers={"Authorization": "KakaoAK f9a96ae869e11011ecf112292464165d"})
#     json_obj = result.json()
#     for document in json_obj['documents']:
#         val = [row[0], document['address_name'], document['y'], document['x']]
#         for j in range(1, 49):
#             val.append(int(row[j]))
#         list.append(val)
#         print(val)
#
# column = ['station', 'address_name', 'lat', 'lng']
# for t in range(4, 28):
#     column.append((str(t % 24) + "_on"))
#     column.append((str(t % 24) + "_off"))
#
# f.close()
#
# df = pd.DataFrame(list, columns=column)
# print(df)
# df.to_csv('src/result.csv', encoding='utf-8-sig')

df = pd.read_csv('src/result.csv')
print(df)

map = folium.Map(location=[37.55, 126.98], zoom_start=11)

for t in range(4, 28):
    i = t % 24
    for station, lat, lng, on in zip(df.station, df.lat, df.lng, df[(str(i)+"_on")]):
        if on == 0:
            hexa = "#ffffff"
        elif on >= 600000:
            hexa = "#ff0000"
        else:
            tmp = "{0:04x}".format(int(on / 9))
            hexa = "#ff" + tmp

        folium.CircleMarker([lat, lng],
                            radius=5,
                            color = hexa,
                            fill=True,
                            fill_color=hexa,
                            fill_opaticy=1,
                            ).add_to(map)

    map.save('map/' + str(i) + '_on.html')