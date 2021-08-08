def multiple_of_index(arr):
    i = 0
    arr1 = []
    for item in arr:
        if i > 0 and int(item) % i == 0:
           arr1.append(item)
           i += 1
        else:
            i += 1
    return arr1



print(multiple_of_index([22, -6, 32, 82, 9, 25]))
print(multiple_of_index([68, -1, 1, -7, 10, 10]))
print(multiple_of_index([-56,-85,72,-26,-14,76,-27,72,35,-21,-67,87,0,21,59,27,-92,68]))

"""
def multiple_of_index(l):
    return [l[i] for i in range(1, len(l)) if l[i] % i == 0]

def multiple_of_index(arr):
    return [val for index, val in enumerate(arr) if index and val % index == 0]

