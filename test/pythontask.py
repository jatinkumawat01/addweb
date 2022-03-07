a=[int(x) for x in input().split(",")] 
n=int(input()) 
l=[] 
for i in range(len(a)-1):
    c=0 
    #print(a[i],a[i+1]) 
    for j in range(2, min(a[i], a[i+1])+1):
        if a[i]%j==a[i+1]%j==0:
            c=1 
    if c==0 and a[i]>a[i+1]:
        l.append(i)
print(l[0])