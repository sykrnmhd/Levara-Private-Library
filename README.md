
# Levara Private Library

Group Members:

MUHAMMAD DANIEL HAKIM BIN MOHD SUHAIMI 2018451

MUHAMMAD AIMAN SYAKIRIN BIN MOHD FAUZI 2010391

AZAMUDDEEN BIN SHAHPUDIN 2018065

MOHD FAIZ HAFIZUDDIN BIN AHMAD YAZI 2011837


## Introduction

The process of handling a library with a large amount of records is quite tiring when doing it manually. With the existence of modern technology and systems, these processes can be made easily with just a few clicks and typing. Our project focuses on creating a website for a Levara private library service.
The website also includes managing work schedules for each employee and their task. With this system, employers can manage all the book databases and also monitor ‘person in charge’ for each day and their tasks. Employer as the admin of the system can update and remove the information of certain books.
This system also allows book lending through booking service. Visitors just need to register as a member and login the system and search for their books by book id or title and proceed to booking.

## Objectives
The objectives of the “Levara private library and duty roster” are as follows:
1. To create a website that compiles all of the books in 
2. To create a website that compiles the staffs’ work hours
3. To create a website that ease the book searching
4. To create a website that helps users to lend books easily by booking
5. To create a website that allows workers to see their working shift easily
6. To create a website that allows workers keep track of book records
7. To help the stores storage records

## Features and Functionalities

The following are some of the features provided by the website that we want to create:
1. Login feature: Login and account registration function
2. Booking feature: Lend a book by booking
3. Book searching feature: Search for a book function
4. Work shift making feature: Workers can create and see their working shift
5. Book record update, create and delete feature: Workers can keep records on the books whereabout

## Views

The view describes how the app's data should be presented. It shows the user's information in an understandable format based on their actions. In the Levara private library web app, the use of views would be a way to show the books available to the users, the status of the books, and receive data from models to display.

## Controllers

Laravel also has controllers, which are an important component. Instead of writing the handling request logic in route files like closures, this procedure may be organized with the aid of Controller classes. Controllers are intended to aggregate related request processing functionality into a single class. They are located in the app/Http/Controllers directory of your Laravel project. Model View Controller is the complete version of MVC, which directs traffic between Views and Models. In the Levara private library web app, the controller will be the intermediary between input, data, and output.

## Routes

A route is a method for generating a request URL for your application. These URLs are both human readable and SEO friendly, as they do not have to correspond to specific files on a website. Routes are generated in the routes folder in Laravel. For websites, they are built in the web.php file. APIs are also built within api.php. Laravel routing allows users to direct all application requests to the proper controller. Most Laravel primary routes recognize and accept a uniform asset identifier together with a closure, providing a straightforward and expressive manner of routing. Levara web routes are defined in route files found within the routes directory. 

## Models

Models used in our website are to specify the data for each functionalities. For example, the details of the books in the library, details of the workers, details of the members, the borrowing details made and the schedule of the working shift.

## Entity Relationship Diagram

![Levara ERD](https://user-images.githubusercontent.com/98005633/209836102-0f614ed1-0c14-4462-9a6d-9c0abe48816d.png)

## Sequential Diagram

![Levara Sequence Diagram](https://user-images.githubusercontent.com/98005633/209836237-b795aed9-7499-46bc-bd8e-c5703f26fd6e.png)

## Project system captured screen and explanation


## Challenge/difficulties to develop the application
1. To connect he web application to the database
2. Working as a team and working on a different platform at the sam time made it hard to compile all the files
3. To route the authentication of the user and the staff in the website
4. To create the scheduling of the staff 
