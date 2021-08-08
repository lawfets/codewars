def even_or_odd(s):
    even = 0
    odd = 0
    for i in s:
        i = int(i)
        if i % 2 == 0:
            even += i
        else:
            odd += i
    if even == odd:
        return "Even and Odd are the same"
    elif even > odd:
        return "Even is greater than Odd"
    else:
        return "Odd is greater than Even"
