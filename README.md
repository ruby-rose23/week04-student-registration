Project Title

Student Registration System

------

Introduction

Schools used paper forms to register students. It make the work slower and easy to lose papers or make mistakes when writing information by hand. A digital system fixes this. The student can just type their information on a form, and the computer checks and saves it. This project is a Student Registration System. It is a small website where a student can open a registration form, type the student's information, upload a profile picture and lick submit. The system checks if the information are correct and if something is missing or wrong, it will show an error and it will not save it. If everything is correct, it saves the student and shows a success message and show in the student's profile. Validation is important because it stops misleading and missing data from going to the database. If there is no validation, a student can be saved with no name or a wrong email, and this will cause problems later. Registration systems like this are used in many real systems, like schools, hospitals, banks, and government offices. They all need a safe way to save information from people.

-----

Objectives

Create a student registration form using Laravel Blade.
Add validation rules to check the input.
Show flash messages for success and for errors.
Upload and save a profile picture using Laravel.
Make a database table using Laravel Migration.
Use Git and GitHub to save and show my project.

----

Laravel Request Lifecycle

Browser – The student opens the form and fills it in.

Route – The form sends the data to a route. The route points to the store method in StudentController.

Controller – StudentController@store gets the request and runs the validation.

Validation – Laravel checks each field. If one rule fails, it stops here and sends the user back with error messages.

Model – If everything is correct, it saves the data using the Student model.

Database – A new row goes into the students table.

Response – The page goes to the student profile and shows "Student registered successfully!"

<img width="606" height="836" alt="image" src="https://github.com/user-attachments/assets/def93b74-f6f4-4224-8e9b-5f1404cbf454" />


------

Validation Rules

Required fields

Some fields must always have to fill up like Student ID, First Name, Last Name, Email, Mobile Number, Date of Birth, Gender, Program, Year Level, and Address. This important cause these are the basic details that is needed to know who is the student. If it is empty, the record will not be complete and it will be useless for the school.

Unique constraints

Student ID and Email has the unique value. This means two student cannot have same Student ID or same Email in the database. This is important because it stops the duplicate records from happening. If two students have same ID, the school will not know anymore which record is for who.

Email validation

The email unique is for checking if the email is in correct format like name@example.com. This important because a wrong or fake email cannot be use to contact the student later like for sending updates or confirmation.

Numeric validation

The Mobile Number has the numeric rule. This is making sure that only number can be enter, no letters or symbols allowed. This is important because mobile number is being used for calling or texting so it need to only have digits para gumana ng tama.

Image validation

The Profile Picture field has the image rule. This is making sure na only real image file, and only the allowed types which is JPG, JPEG, PNG can be upload. This important for security, kasi it stops somebody from uploading a harmful file na pinapanggap lang na picture.

File size restrictions

The Profile Picture also have max:2048, which mean the file is not allowed to be bigger than 2MB. This is important because it stops the very large file from taking up space sa server storage and makes the system slow. It also help the upload to be faster for the user.



------

Database Design

 <img width="420" height="728" alt="image" src="https://github.com/user-attachments/assets/839b7e7e-bd70-494b-9ddf-5525eb339231" />

 <img width="1403" height="903" alt="image" src="https://github.com/user-attachments/assets/02d0fbc7-ac68-42ce-a9ab-f3bbf5d582ed" />

Primary Key 

Primary Key: id (made automatically by Laravel, goes up by 1 each time).

Constraints

Unique: student_id and email — this stops two students from having the same ID or email.
Data Types: most fields are string, date is for the birthday, text is for the longer address.
Timestamps: created_at and updated_at are added by Laravel to show when a record was made or changed.


 ------

 Flowchart

 -------

Screenshots

Registration Form 

<img width="1853" height="660" alt="image" src="https://github.com/user-attachments/assets/d6bbc1f9-07b8-4ce9-b377-5088b4f03046" />

<img width="1872" height="912" alt="image" src="https://github.com/user-attachments/assets/4ac50bb0-6cec-4107-8bd7-6da5d3290d5a" />

<img width="1882" height="902" alt="image" src="https://github.com/user-attachments/assets/c08a955d-9e48-469f-8ade-f612aa6012db" />

Validation Errors

<img width="1467" height="540" alt="image" src="https://github.com/user-attachments/assets/21a44dbd-8f01-49c7-8ace-7b3e490e2583" />

<img width="1782" height="670" alt="image" src="https://github.com/user-attachments/assets/132e8375-d178-4b47-a13e-81a0aa2df7bb" />

<img width="1890" height="887" alt="image" src="https://github.com/user-attachments/assets/e867a6b9-7a46-48d0-be37-beb2b0df8d03" />

Successful Registration

<img width="1705" height="568" alt="image" src="https://github.com/user-attachments/assets/5e2c8b54-60cf-4b33-94d1-8c31fd333018" />

<img width="1877" height="893" alt="image" src="https://github.com/user-attachments/assets/af977a01-2544-4a29-8d78-00c651d8c904" />

Flash Message 

<img width="1902" height="677" alt="image" src="https://github.com/user-attachments/assets/e12d2cd3-d56c-41dc-b361-2bacef9d5940" />

<img width="1407" height="541" alt="image" src="https://github.com/user-attachments/assets/0e348f39-8536-42f2-b442-ff49b6ea797f" />

<img width="1368" height="120" alt="image" src="https://github.com/user-attachments/assets/863a439f-50ee-444a-964d-3a23f62ee26a" />

Uploaded Profile Picture 

<img width="1606" height="588" alt="image" src="https://github.com/user-attachments/assets/0d596063-5810-41ca-b040-1c990b92ffd1" />

<img width="1852" height="665" alt="image" src="https://github.com/user-attachments/assets/d5d5819f-17ea-4c1d-af21-e51f603ea473" />

<img width="1483" height="810" alt="image" src="https://github.com/user-attachments/assets/caf28f06-783a-4204-8522-418e9372d6fe" />

<img width="522" height="222" alt="image" src="https://github.com/user-attachments/assets/fe3d18f6-cee6-4d93-8641-1b8271746ce0" />

Database Table 

<img width="1403" height="903" alt="image" src="https://github.com/user-attachments/assets/02d0fbc7-ac68-42ce-a9ab-f3bbf5d582ed" />

<img width="1415" height="895" alt="image" src="https://github.com/user-attachments/assets/077479ab-0ba7-4139-a555-580d0f96064a" />

<img width="1907" height="723" alt="image" src="https://github.com/user-attachments/assets/cdaad307-3176-4651-9737-b911c78c0ffc" />

Student Profile Page 

<img width="1901" height="676" alt="image" src="https://github.com/user-attachments/assets/d5bced9c-58fe-441b-a6b0-42fa3808a34a" />

<img width="1883" height="865" alt="image" src="https://github.com/user-attachments/assets/2769f993-5901-4f34-bcdd-61fa112b2684" />

VS Code Project Structure

<img width="395" height="857" alt="image" src="https://github.com/user-attachments/assets/d261ae59-dd9c-4557-9b42-6866e7b4c851" />

GitHub Repository 

<img width="1860" height="886" alt="image" src="https://github.com/user-attachments/assets/3bbf8d1a-14b7-4ddf-a1e7-21118e0475ed" />

------

Problems Encountered

Validation errors did not show on the form. The error messages did not show even when I submitted an empty form.
The uploaded profile picture did not show. After a student was saved, the picture path in the database did not match the real file location, so the image did not show on the profile page. 


-----

Solutions

Validation errors didn't show cause there is a missing code in the blade file. Only validation rules were in the controller, during form submission, no errors showed. By adding an @if ($errors->any()) block to the view, error messages finally appeared, highlighting the need for proper display in validation.

The uploaded profile picture didn't display even it says successful registration. The image file path was correctly saved, but the file was in a hidden storage folder. The issue was resolved by creating a symbolic link between storage and public directories using `php artisan storage:link`, allowing the browser to access the image securely.

-----

 Reflection 

 Building the Student Registration System using Laravel was one of the most helpful projects for me cause we need this kind of knowledge for our project and I learned a lot about how validation works in real applications. 

The most important thing I learned from this project is how important validation is and not just to stop empty fields but to protect the whole system from wrong or duplicate data. I thought if the form looks fine on the screen thats already ok. Now I know that even if the form looks like correct the server still needs to check it again, because the user can bypass anything on the browser side. The unique taught me this since it stops two students from having the same student ID or email which would confuse the whole system if it happens.

I also learned how a request travels through the Laravel from the browser to the route to the controller then to validation and finally to the model and database. While doing the actual project and learn how each part has its own job. The route just points where to go and the controller receives the request and checks it and the model is the one that talks to the database. Doing this made the debugging easier for me because now I know exactly where to check when something is not working in my project.

Server side validation and client side validation is another thing that I understood better after this project. I used to think that as long as the form has required in HTML thats already safe. But I learned that this can be easily be skipped by the user, while Laravel server side validation cannot be bypassed because it happens on the server where the user has no access. This make me learn that the client side validation is only for quick a feedback but the server side is what actually protects the data.

File upload also taught me something new, especially about file security. If the system allows any file type without checking it someone might could upload a harmful file and just rename it like a picture. Using image, mimes:jpg,jpeg,png, and max:2048 helped me understand how to accept only real, safe, and appropriately sized image files.

This project made me realize how registration systems are used in real enterprise applications, like schools, hospitals, banks, and government systems. All of them need have this kind of same idea, required fields, unique checking, safe file upload, and clear success or error messages, so that the data they collect are clean, reliable, and safe. I feel like this project prepared me a lot for our next big project this sem, which is the e-commerce since I will probably need the same validation and file handling skills there too.

Working in this also made me to have more patient when it comes to debugging, since most of the errors I encountered were small mistakes like wrong field names or missing rules, not big problems. It taught me to check things step by step instead of panicking right away whenever something are not working.

 ----

 References

Laravel. (n.d.). Laravel 11.x documentation. https://laravel.com/docs

MDN Web Docs. (n.d.). HTML forms. https://developer.mozilla.org/en-US/docs/Learn/Forms

MySQL. (n.d.). MySQL 8.0 reference manual. Oracle Corporation. https://dev.mysql.com/doc/

PHP. (n.d.). PHP manual. The PHP Group. https://www.php.net/manual/en/

Tailwind CSS. (n.d.). Tailwind CSS documentation. Tailwind Labs. https://tailwindcss.com/docs



 
