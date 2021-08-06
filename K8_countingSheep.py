list =  [True,  True,  True,  False,
  True,  True,  True,  True ,
  True,  False, True,  False,
  True,  False, False, True ,
  True,  True,  True,  True ,
  False, False, True,  True]

def count_sheeps(sheep):
    secCount = 0
    for item in list:
        if item:
            secCount += 1
        else :
            pass
    return secCount

print(count_sheeps(list))
