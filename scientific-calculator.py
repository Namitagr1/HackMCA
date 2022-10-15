import math


operand1 = 0
operand2 = 0
operator = None
result = None

def plus(op1, op2):
    return op1 + op2

def minus(op1, op2):
    return op1 - op2

def times(op1, op2):
    return op1 * op2

def divide(op1, op2):
    return op1 / op2

def expo(op1, op2):
    return math.pow(op1,op2)
    
def x_root(op1, op2):
    return math.pow(op1,(1/op2))

def percent(op1, op2):
    x = 100*op1/op2
    return (str(x) + "%")

def cosine(op1):
    return math.cos(op1)
def sine(op1):
    return math.sin(op1)
def tangent(op1):
    return math.tan(op1)






def insertDigit(digit):
    global operand1, operand2
    if operator == None:
        if operand1 == 0:
            operand1 = digit
        else:
            operand1 = int((operand1) + (digit))
    else:
        if operand2 == 0:
            operand2 = digit
        else:
            operand2 = int((operand2) + (digit))
    

def insertOperator(op):
    global operator
    operator = op

def equalPressed():
    global operator, operand1, operand2, result
    if operator == '+':
        result = plus(operand1, operand2)
    elif operator == '-':
        result = minus(operand1, operand2)
    elif operator == '*':
        result = times(operand1, operand2)
    elif operator == '/':
        result = divide(operand1, operand2)
    elif operator == '^':
        result = expo(operand1, operand2)
    elif operator == 'xroot':
        result = x_root(operand1, operand2)
    elif operator == '%':
        result = percent(operand1, operand2)
    elif operator == 'cos':
        result = cosine(operand1)
    elif operator == 'sin':
        result == sine(operand1)
    elif operator == 'tan':
        result == tangent(operand1)

    else:
        result = operand1

def clearPressed():
    global operand1, operand2, operator
    if operator == None:
        operand1 = 0
    else:
        if operand2 == 0:
            operand1 = 0
            operator = None
        else:
            operand2 = 0


    
op1 = float(input("number 1: "))
jackharlow = input("What is the symbol of the operation you are performing: ")

if jackharlow == "sin":
    op2 = None
elif jackharlow == "cos":
    op2 = None
elif jackharlow == "tan":
    op2 = None
else: 
    op2 = float(input("number 2: "))

    


insertDigit(op1)

insertOperator(jackharlow)

insertDigit(op2)

equalPressed()

print(result)
