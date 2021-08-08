def factorial(n):
    factorialN = 1
    if isinstance(n, int):
        if n < 0:
            return 'can\'t use factorial function on negative integers'
        elif n <= 1:
            return 1
        else:
            for item in range(1, n+1, 1):   # range excludes last item, so (n + 1)
                factorialN *= item          # the last 1 in above code isn't necessary, it just gives the step
            return filter                   # the first 1 is necessary as range starts from 0 if there's no starting number
    else:
        return 'variable n is not an integer'
