import pandas as pd
import sys

df = pd.read_csv('C:/xampp/htdocs/Web Dev/agarwal-io/IPEDS_data.csv')


state = sys.argv[1].title()
score = int(sys.argv[2])

STUFFTOPRINT = ['Name', 'Tuition and fees, 2013-14', 'Applicants total', 'Admissions total', 'Percent of freshmen receiving any financial aid']

temppppp = df['State abbreviation'].tolist()
starterforstate = 0
for x in temppppp:
  if x == state:
    break
  starterforstate += 1

lsist_scores_reach = df.loc[df['State abbreviation'] == state]['ACT Composite 25th percentile score'].tolist()
lsist_reach = df.loc[df['State abbreviation'] == state]
reaches = []
reachcounts = []
scoretemp = score
while len(reachcounts) < 4:
  count = 0
  for x in lsist_scores_reach:
    if x == scoretemp:
      reachcounts.append(count)
    count += 1   
  scoretemp += 1
while len(reachcounts) > 5:
  del reachcounts[-1]
reachcountsnew = []
for x in reachcounts:
  reachcountsnew.append(starterforstate + 4 + x) 
reaches = df.iloc[reachcountsnew]
reachesfinal = []
print("\nYour reach schools based on your ACT score are: \n")
for x in range(5):
  for i in STUFFTOPRINT:
    print(i + ': ' + str(df.iloc[reachcountsnew[x]][i]))
  print(' ')



lsist_scores_target = df.loc[df['State abbreviation'] == state]['ACT Composite 75th percentile score'].tolist()
lsist_target = df.loc[df['State abbreviation'] == state]
targets = []
targetcounts = []
scoretemp = score

while len(targetcounts) < 4:
  count = 0
  for x in lsist_scores_target:
    if x == scoretemp:
      targetcounts.append(count)
    count += 1   
  scoretemp += 1
while len(targetcounts) > 5:
  del targetcounts[-1]
targetcountsnew = []
for x in targetcounts:
  targetcountsnew.append(starterforstate + x) 
targets = df.iloc[targetcountsnew]
targetsfinal = []
print("\nYour target schools based on your ACT score are: \n")
for x in range(5):
  for i in STUFFTOPRINT:
    print(i + ': ' + str(df.iloc[targetcountsnew[x]][i]))
    print(' ')

lsist_scores_safety = df.loc[df['State abbreviation'] == state]['ACT Composite 75th percentile score'].tolist()
lsist_safety = df.loc[df['State abbreviation'] == state]
safeties = []
safetycounts = []
scoretemp = score
for x in range(len(lsist_scores_safety)):
  lsist_scores_safety[x] += 2

while len(safetycounts) < 4:
  count = 0
  for x in lsist_scores_safety:
    if x == scoretemp:
      safetycounts.append(count)
    count += 1   
  scoretemp += 1
while len(safetycounts) > 5:
  del safetycounts[-1]
safetycountsnew = []
for x in safetycounts:
  safetycountsnew.append(starterforstate + x) 
safeties = df.iloc[safetycountsnew]
safetiesfinal = []
print("\nYour safety schools based on your ACT score are: \n")
for x in range(5):
  for i in STUFFTOPRINT:
    print(i + ': ' + str(df.iloc[safetycountsnew[x]][i]))
    print(' ')
