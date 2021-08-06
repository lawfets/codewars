def apple(x):
    if int(x)**2 > 1000:
        return 'It\'s hotter than the sun!!'
    else:
        return 'Help yourself to a honeycomb Yorkie for the glovebox.'

def apple2(x):
    return 'It\'s hotter than the sun!!' if int(x)**2 > 1000 else 'Help yourself to a honeycomb Yorkie for the glovebox.'

appleL = lambda x: ("Help yourself to a honeycomb Yorkie for the glovebox.","It's hotter than the sun!!")[int(x)**2>1000]

print(apple(105))

print(apple2(105))

print(appleL(105))

#especially the lambda function is quite difficult to grasp in the beginning
