import csv
import re

def calculate_calibration_value(line):
    first_digit = int(re.search(r'\d', line).group())
    last_digit = int(re.search(r'\d', line[::-1]).group())
    calibration_value = int(str(first_digit) + str(last_digit))
    return calibration_value

csv_file_path = "input.csv"
with open(csv_file_path, 'r') as file:
    rows = list(csv.reader(file))

total_calibration_value = 0

for row in rows:
    if row:
        line = row[0]
        calibration_value = calculate_calibration_value(line)
        print(f"Calibration value for '{line}': {calibration_value}")
        total_calibration_value += calibration_value

print(f"Total Calibration Value: {total_calibration_value}")
