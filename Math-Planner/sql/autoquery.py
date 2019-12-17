#-*-coding utf-8-*-
# autoquery.py

# yeonma_math1
# yeonma_huaktong

def query(BigMem, BigNum):
    f_txt = open("data.txt", "r", encoding="utf-8")
    i=1
    while True:
        line = f_txt.readline()
        if not line:
            break
        with open("query.sql", "a", encoding="utf-8") as f_query:
            data1 = "INSERT INTO yeonma_huaktong (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES"
            data2 = "('" + BigMem + "', " + str(BigNum) + ", '" + line + "', " + str(i) + ", 0);"
            data3 = data1 + data2
            print(data3)
            f_query.write(data1+"\n")
            f_query.write(data2)
        i+=1
    f_txt.close
    print("DONE")

mem = input("대단원명 : ")
num = input("대단원 번호 : ")

query(mem, num)
