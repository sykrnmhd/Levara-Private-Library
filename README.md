
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

![Screenshot_20230123_090728](https://user-images.githubusercontent.com/98005633/214049120-e55b774e-29d1-4904-aea2-d4bc3d4791e9.png)
This is the landing page for user and admin

![Screenshot_20230123_090802](https://user-images.githubusercontent.com/98005633/214049211-317e550b-3e50-4899-bcbf-b9d0b9dbe363.png)
This page is for user to register to the website

![Screenshot_20230123_090816](https://user-images.githubusercontent.com/98005633/214049264-bd3fb1b0-cd82-4f3c-ad04-c9106c3093d0.png)
This pafe is for user to login to the system

![Screenshot_20230123_090831](https://user-images.githubusercontent.com/98005633/214049292-7ef77071-56dd-42a3-beaf-302bdaf2792c.png)
This is the landing page for user/admin depending on their roles

![Screenshot_20230123_090843](https://user-images.githubusercontent.com/98005633/214049321-32622e98-8444-4a01-8a08-050261bca7a0.png)
This is the homepage for both user and admin

![Screenshot_20230123_090909](https://user-images.githubusercontent.com/98005633/214049326-35042cb4-dea7-44cb-8371-072c7d17edfd.png)
This page allows user to search for books

![Screenshot_20230123_090935](https://user-images.githubusercontent.com/98005633/214049328-bf0accc0-b45c-40cd-9760-d5f039741bf0.png)
This page is for admin to view employee schedules

![Screenshot_20230123_090947](https://user-images.githubusercontent.com/98005633/214049329-6ac2ceb6-6579-4245-8d1f-cd69d32c24dd.png)
This page is for admin to edit employee schedule

![Screenshot_20230123_090958](https://user-images.githubusercontent.com/98005633/214049333-40cf0426-9a4c-449c-96a1-f3255977ddc3.png)
This page is for admin to view book list

![Screenshot_20230123_091029](https://user-images.githubusercontent.com/98005633/214049335-933f2ac1-c5bb-433a-8d7c-d6ceebb2cb3c.png)
This page is for user to edit book details

![Screenshot_20230123_092356](https://user-images.githubusercontent.com/98005633/214050501-996aec25-d563-4d65-b1f0-62c39cb6b7bb.png)
This page is for admin to add book

![Screenshot_20230123_091134](https://user-images.githubusercontent.com/98005633/214049339-64f27621-15f1-44ea-be25-5e3479f4d181.png)
This page is for user to view the booking list

![Screenshot_20230123_091144](https://user-images.githubusercontent.com/98005633/214049342-fb8b172b-e999-496c-88ea-b824bf6b3e9b.png)
This page is for user to make booking

## Challenge/difficulties to develop the application
1. To connect the web application to the database
2. Working as a team and working on a different platform at the same time made it hard to compile all the files
3. To route the authentication of the user and the staff to its routing in the website
4. To create the scheduling of the staff 
5. The database for each team member is different because of different server used
