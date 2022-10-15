import sys

name = sys.argv[1]
mins = int(sys.argv[2])
hw = [float(sys.argv[i]) for i in range(3, 7)]
q = [float(sys.argv[i]) for i in range(7, 9)]
exam = float(sys.argv[9])

hrs = mins // 60
min = mins % 60
avghw = sum(hw) / len(hw)
avgq = sum(q) / len(q)
ovrlg = 0.35 * avghw + 0.15 * avgq + 0.5 * exam
print(f'Course Name: {name}')
print(f'Weekly time spent: {hrs}h{min}min')
print(f'Average homework grade: {avghw}')
print(f'Average quiz grade: {avgq}')
print(f'Final exam grade: {exam}')
print(f'Overall grade: {ovrlg}')