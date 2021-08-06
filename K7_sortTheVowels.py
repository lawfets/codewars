def sort_vowels(s):
    if (isinstance(s, int)) or s == None or not(s):
        return ""
    else:
        listS = list(s)
        emptyString = ""
        i = -1 #i starts at -1 because it is iterated before the if statement and the first item in the list is listS[0]
        for item in listS:
            i += 1 #i is needed to put the items back in the list in the right order cfr. listS[i]
            if i < (len(listS) - 1): #i is also used to avoid that the last letter would also get a \n
                if item.lower() == "a" or item.lower() == "e" or item.lower() == "i" or item.lower() == "o" or item.lower() == "u":
                    item = "|" + item + "\n" #by using item.lower() i only have to use or between lower case vowels
                
                else:
                    item = item + "|" + "\n"
                
                listS[i] = item
            else:
                if item.lower() == "a" or item.lower() == "e" or item.lower() == "i" or item.lower() == "o" or item.lower() == "u":
                    item = "|" + item
                
                else:
                    item = item + "|"
                
                listS[i] = item
            
        emptyString = "".join(listS)
        
        return emptyString
# below are shorter ways of doing the same thing.
"""
def sort_vowels(s):
    return type(s)==str and '\n'.join(f'|{i}' if i.lower() in 'aeiou' else f'{i}|' for i in s) or ''

def sort_vowels(s):
    try:
        return '\n'.join('|' + i  if i.lower() in 'aioue' else i + '|' for i in s)
    except:
        return '

def sort_vowels(s):
    return "" if not isinstance(s, str) else "\n".join("|" + x if x in "aeiouAEIOU" else x + "|" for x in s)
"""
#  https://docs.python.org/3/whatsnew/3.6.html#pep-498-formatted-string-literals
"""
def sort_vowels(s):
    return type(s)==str and '\n'.join(f'|{i}' if i.lower() in 'aeiou' else f'{i}|' for i in s) or ''

def sort_vowels(s):
    if type(s) == str:
        return '\n'.join('|' + x if x in ('A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u') else x + '|' for x in s)
    return ''
"""
