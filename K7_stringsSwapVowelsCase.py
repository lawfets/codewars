def swap_vowel_case(st):
    fillerString = ""
    stringList = list(st)
    listToLower = ["A", "E", "I", "O", "U"]
    listToUpper = ["a", "e", "i", "o", "u"]
    for i in stringList:
        if i in listToLower:
            i = str.lower(i)
            fillerString += i
        elif i in listToUpper:
            i = str.upper(i)
            fillerString += i
        else:
            fillerString += i
    return fillerString
        


print(swap_vowel_case("This Is a TEst"))
    
#check to do it with swapcase as well

