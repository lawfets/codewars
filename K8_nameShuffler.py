str_ = "Stefaan Walleghem"

def solution(str_):
    strLst = str_.split(" ")
    print(strLst)
    strLst.reverse()
    print(strLst)
    return " ".join(strLst)
  

print(solution(str_))
