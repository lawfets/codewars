
def even_and_odd(n):
    stringFromN = str(n)
    NE , NO ='0', '0' # both NE and NO need to have at least one digit 0 for the final int function in the tuple
# if not, there will be an error because an empty string can't be turned into an int
    for intStrInN in stringFromN:
        if int(intStrInN) % 2 == 0: #if this is constantly false f.i. 135, this could lead to empty string
            NE += intStrInN
        else:                       #if this is constantly false f.i. 246, this could lead to empty string
            NO += intStrInN
    return (int(NE),int(NO))
            

print(even_and_odd(126453))
print(even_and_odd(3012))
print(even_and_odd(4628))
print(even_and_odd(0))
print(even_and_odd(54236985624))
print(even_and_odd(524875))
print(even_and_odd(4200354))
print(even_and_odd(135))
