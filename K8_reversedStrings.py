def solution(stringToReverse):
    listStringToReverse = list(stringToReverse)
    listStringToReverse.reverse()
    stringToReverse = "".join(listStringToReverse)
    return stringToReverse

print(solution("python"))

def secSolution(stringToReverse):
    return stringToReverse[::-1]

print(secSolution("python"))
