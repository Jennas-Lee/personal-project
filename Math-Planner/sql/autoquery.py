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
            data = "INSERT INTO yeonma_math1 (BigMem, BigNum, SmlMem, SmlNum, CompleteTrue) VALUES ('" + BigMem + "', " + str(BigNum) + ", '" + line + "', " + str(i) + ", 0);"
            print(data)
            f_query.write(data)
        i+=1
    f_txt.close
    print("DONE")

mem = input("대단원명 : ")
num = input("대단원 번호 : ")

query(mem, num)
