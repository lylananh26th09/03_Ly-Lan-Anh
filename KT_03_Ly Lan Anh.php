/* Bai kiem tra 
Trac nghiem : 
Cau 1 : Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
)
Cau 2 : a. True
Cau 3 : a. array()
Cau 4 : a. readfile()
Cau 5 : b.  Chuyển đổi một đối tượng thành một chuỗi
*/
<?php
// Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
echo "Bài 1: <br>"; 
// 1.1: Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
function generateFibonacci($n) {
    $fibonacci = [];

    if ($n >= 1) {
        $fibonacci[] = 0;
    }

    if ($n >= 2) {
        $fibonacci[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }

    return $fibonacci;
}

// Gọi hàm generateFibonacci() để lấy dãy số Fibonacci đầu tiên có 10 phần tử
$fibonacciSequence = generateFibonacci(10);
// 1.2: Hiển thị dãy số Fibonacci
echo "Dãy số Fibonacci đầu tiên có 10 phần tử là: ";
foreach ($fibonacciSequence as $number) {
echo $number . " ";
}
echo "<br>";
//Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
echo "Bài 2: <br>";
// 2.1: Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
$students = [
    [
        'id' => 1,
        'name' => 'Ly Lan Anh',
        'age' => 20,
        'grade' => 9.5
    ],
    [
        'id' => 2,
        'name' => 'Nguyen Xuan Truong',
        'age' => 23,
        'grade' => 9.0
    ],
    [
        'id' => 3,
        'name' => 'Bui Truong Giang',
        'age' => 20,
        'grade' => 8.5
    ]
];

// 2.2: Hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh:"."<br>";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . "<br>";
    echo "Tên: " . $student['name'] . "<br>";
    echo "Tuổi: " . $student['age'] . "<br>";
    echo "Điểm: " . $student['grade'] . "<br>";
    echo "\n";
}

// 2.3: Viết hàm tìm học sinh có điểm cao nhất (grade)
function findStudentWithHighestGrade($students) {
    $highestGrade = 0;
    $studentWithHighestGrade = null;

    foreach ($students as $student) {
        if ($student['grade'] > $highestGrade) {
            $highestGrade = $student['grade'];
            $studentWithHighestGrade = $student;
        }
    }

    return $studentWithHighestGrade;
}

// Gọi hàm findStudentWithHighestGrade() để tìm học sinh có điểm cao nhất
$studentWithHighestGrade = findStudentWithHighestGrade($students);

// Kiểm tra xem có học sinh có điểm cao nhất hay không
if ($studentWithHighestGrade) {
    echo "Học sinh có điểm cao nhất:\n";
    echo "ID: " . $studentWithHighestGrade['id'] . "<br>";
    echo "Tên: " . $studentWithHighestGrade['name'] . "<br>";
    echo "Tuổi: " . $studentWithHighestGrade['age'] . "<br>";
    echo "Điểm: " . $studentWithHighestGrade['grade'] . "<br>";
} else {
    echo "Không có học sinh nào trong danh sách"."<br>";
}
echo "<br>";
?>