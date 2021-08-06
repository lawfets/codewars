def likes(names):
    # your code here
    otherLikes = 0
    if len(names) == 0:
        return "no one likes this"
    elif len(names) == 1:
        return str(names[0]) + " likes this"
    elif len(names) == 2:
        return str(names[0]) + ' and ' + str(names[1]) + ' like this'
    elif len(names) == 3:
        otherLikes = int(len(names)) - 2
        return str(names[0]) + ', ' + str(names[1]) + ' and ' + str(names[2]) + ' like this'
    elif len(names) >= 4:
        otherLikes = int(len(names)) - 2
        return str(names[0]) + ', ' + str(names[1]) + ' and ' + str(otherLikes) + ' others like this'
