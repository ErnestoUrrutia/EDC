lista1=["uno","dos","tres","cuatro","cinco","seis","siete"]
lista2=[True,4,"Hola",[1,2]]


lista1.append("ocho")
lista2.extend([3, 4])

for valor in lista1:
    print(valor,end=" ")
print("")
for valor in lista2:
    print(valor,end=" ")


print("\n",lista2[3][0])