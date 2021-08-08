def quarter_of(month):
    if isinstance(month, int):
        if 0 < month <= 3:
            return 1
        elif 3 < month <= 6:
            return 2
        elif 6 < month <= 9:
            return 3
        elif 9 < month <= 12:
            return 4
        else:
            return "not an integer counting as month"
    else:
        return "this is not an integer"
    
print(quarter_of(-1))
print(quarter_of(0))
print(quarter_of(1))
print(quarter_of(2))
print(quarter_of(3))
print(quarter_of(4))
print(quarter_of(5))
print(quarter_of(6))
print(quarter_of(7))
print(quarter_of(8))
print(quarter_of(9))
print(quarter_of(10))
print(quarter_of(11))
print(quarter_of(12))
print(quarter_of(13))
print(quarter_of("veertien"))


