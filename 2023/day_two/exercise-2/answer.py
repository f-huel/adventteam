file_path = "input.txt"

def process_data(gd):
    mc3 = {'red': 0, 'green': 0, 'blue': 0}
    for check in gd.split(';'):
        c3 = {'red': 0, 'green': 0, 'blue': 0}
        for dat in check.split(','):
            dat = dat.strip()
            if dat:
                c, col = dat.split()
                c3[col] += int(c)
        mc3 = {col: max(mc3[col], c3[col]) for col in mc3}
    return mc3

def parse_input():
    total_sum = 0
    with open(file_path, 'r') as file:
        for line in file:
            _, gd = line.split(':')
            data = process_data(gd)
            total_sum += data['red'] * data['green'] * data['blue']
    return total_sum

print(parse_input())
