#one cut = 2 sides
#2 cuts = 3 sides
#3 cuts = 4 sides
#4 cuts = 5 sides

def count_squares(cuts):
    if isinstance(cuts, int):
        if  cuts > 0:
            x = (cuts+1)*(cuts+1)*2 +(cuts-1)*4*cuts
#           x = 6*cuts**2 + 2  shortened form
        elif cuts == 0:
            x = 1
        else:
            return "cuts can not be negative"
        return x
    else:
        return "seems like cuts is not an integer"


print(count_squares(2))
print(count_squares(3))
print(count_squares(4))
print(count_squares(5))
print(count_squares(6))
print(count_squares(7))
print(count_squares(0))
print(count_squares(-1))
print(count_squares("test"))


