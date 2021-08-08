def divisors(n):
    list = []
    print(range(1, n))
    for i in range(1, n + 1):
        if n % i == 0:
            list.append(i)
    return len(list)



def divisors1(n):
    return  len([l_div for l_div in range(1, n + 1) if n % l_div == 0]);


#above functions find the amount of divisors from the int n
'''
divisors(4)  == 3  # 1, 2, 4
divisors(5)  == 2  # 1, 5
divisors(12) == 6  # 1, 2, 3, 4, 6, 12
divisors(30) == 8  # 1, 2, 3, 5, 6, 10, 15, 30
'''
