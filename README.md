# EnAlquiler Tecnical Test
Write a web application using a language / framework of your choice. This web application
should have the following URLs

* /placements . Should present the solution to The Placements Problem.
* /coffeeshop . Should present the solution to The coffee shop problem


Query for placements on names of those students whose best friends got offered a higher salary than them. Names must be ordered by the salary amount offered to the best friends.

````
SELECT student.name as name 
FROM students as student
  INNER JOIN friends as a ON student.id=a.id
  INNER JOIN packages as packageStudent ON student.id=packageStudent.id
  INNER JOIN students as bestfriend ON a.friend_id=bestfriend.id
  INNER JOIN packages as packageBestFriend ON bestfriend.id=packageBestFriend.id
WHERE packageBestFriend.salary > packageStudent.salary
ORDER BY packageBestFriend.salary DESC;
````
  

This query for check salary between students and best friends:

````
SELECT student.name as nameStudent, packageStudent.salary as studentSalary, bestfriend.name as nameBestFriend, packageBestFriend.salary as bestFriendSalary
FROM students as student
  INNER JOIN friends as a ON student.id=a.id
  INNER JOIN packages as packageStudent ON student.id=packageStudent.id
  INNER JOIN students as bestfriend ON a.friend_id=bestfriend.id
  INNER JOIN packages as packageBestFriend ON bestfriend.id=packageBestFriend.id
WHERE packageBestFriend.salary > packageStudent.salary
ORDER BY bestFriendSalary DESC;
````
