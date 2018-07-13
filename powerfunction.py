def power(base,exp):
    if(exp==1):
        return(base)
    if(exp==0):
        return 1
    if(exp!=1):
        return(base*power(base,exp-1))

//ask user to give base value some and power value also here so that we can print the result in the next line.i didnt wrote the user asking statements so dont mind.
print("Result:",power(base,exp))