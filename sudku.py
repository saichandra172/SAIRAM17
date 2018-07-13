
def findCell(cube, i, j):
            for x in range(i,9):
                    for y in range(j,9):
                            if cube[x][y] == 0:
                                    return x,y
            for x in range(0,9):
                    for y in range(0,9):
                            if cube[x][y] == 0:
                                    return x,y
            return -1,-1


    def isValid(cube, i, j, a):
            row = all([a!= cube[i][x] for x in range(9)])
            if row:
                    column = all([a != cube[x][j] for x in range(9)])
                    if column:
                            
                            secX, secY = 3 *(i//3), 3 *(j//3) . //for arranging in rows and columns
                            for x in range(secX, secX+3):
                                    for y in range(sec, sec+3):
                                            if cube[x][y] == a:
                                                    return False
                            return True
            return False
 def solveSudoku(cube, i=0, j=0):
            i,j = findCell(cube, i, j)
            if i == -1:
                    return True
            for a in range(1,10):
                    if isValid(cube,i,j,a):
                            cube[i][j] = a
                            if solveSudoku(cube, i, j):
                                    return True
                            
                            cube[i][j] = 0
            return False

