def kill_kth_bit(n, k): #learning to shorten my functions try 3
    listBin = []
    if isinstance(n, int) and n >= 0:
        listBin = list(bin(n))[2:] #remove the 0B prefix to show it's a binary string
        if k > len(listBin):
            return int(''.join(listBin), 2)
        listBin[len(listBin) - k] = "0"
        return int(''.join(listBin), 2)
    return 'not an integer, or negative integer'

print(kill_kth_bit(1, 1))
print(kill_kth_bit(-100, 5))
print(kill_kth_bit(42, 11))
print(kill_kth_bit(37, 3))
print(kill_kth_bit(137, 3))
print(kill_kth_bit(4000, 13))


'''
def kill_kth_bit(n, k): #slightly different then my first solution and negative integer problem removed
    listBin = []
    binaryValue2 = ''
    if isinstance(n, int) and n >= 0:
        binaryValue = bin(n)
        listBin = list(binaryValue)[2:] #remove the 0B prefix to show it's a binary string
        if k > len(listBin):
            for bit in listBin: 
                binaryValue2 += bit
            return int(binaryValue2, 2)

        else:
            binaryLength = len(listBin)
            listBin[binaryLength - k] = "0"
            for bit in listBin:
                binaryValue2 += bit
        return int(binaryValue2, 2)

    else:
        return 'not an integer, or negative integer'
'''
