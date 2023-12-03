file_path = "input.txt"

def check_conditions(check, r, g, b):
    cub = {'red': 0, 'green': 0, 'blue': 0}
    for dat in check.split(','):
        c, col = dat.strip().split()
        cub[col] += int(c)

    return cub['red'] <= r and cub['green'] <= g and cub['blue'] <= b

def parse_input():
    total_sum = 0
    with open(file_path, 'r') as file:
        for line in file:
            gid, gd = line.split(':')
            gid = int(gid.split()[1])
            if all(check_conditions(check, 12, 13, 14) for check in gd.split(';')):
                total_sum += gid

    return total_sum

print(parse_input())
