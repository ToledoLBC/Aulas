y1=[]
y2=[]

for c1 in range(0,3):
    for c2 in range(0,3):
        x1=int(input(f'Digite o falor {c1,c2}: '))
        y2.append(x1)
    y1.append(y2[:])
    y2.clear()

print('-='*10)
for c1 in range(0,3):
    for c2 in range(0,3):
        print(f'[ {y1[c1][c2]} ]',end=' ')
    print(' ')
