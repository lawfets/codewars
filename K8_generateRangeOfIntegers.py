def generate_range(min, max, step):
    list = []
    while min < max:
       list.append(min)
       min += step
    if min == max:
        list.append(min)
    return list

def generate_range1(min, max, step):
    return [*range(min, max + 1, step)]
#above is called starred expression

def generate_range2(min, max, step) :
    """ This function generates a range of integers from min to max, with the step. """
    return[i for i in range(min, max+1 , step)]

generate_range3=lambda mn,mx,s:list(range(mn,mx+1)[::s])
    
        
print(generate_range1(2, 10, 11))
print(generate_range1(-10, 2, 1))
print(generate_range1(3, 20, 3))
print (generate_range1(2, 10, 2))
