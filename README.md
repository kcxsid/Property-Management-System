# Property Management System


<!-------------> 



To download the files and run the website remotely, 
the following steps can be taken: 

- Download and Install XAmpp (to host a local server) 
- A text editor (eg: Sublime text) would be great to change any code (based on user preferences) 
- phpmyadmin has to be configured with the databases that are shown in the *phpmyadmin-databases.png* file (managerdb, properties, ratings, registration, reser, testdatabase). 
- URL to access phpmyadmin: http://localhost/phpmyadmin
- In each database, the tables would have to be created as shown in *database tables.png* file. 
- The *sql* folder contains the SQL dump of all these files, which can be run (alternatively to the previous step) 


If Xampp is used to host the remote server, the files would have to be stored in *XAmpp\htdocs\phpmysql* 
### NOTE: All the files would have to be under the same directory and not in folders, in the given path. 

Open your web-browser and type this URL: http://localhost/phpmysql/index1.php to start! 



## Proberty Management System Description

The system will allow registered customers to reserve short-stay self-catering accommodation for a chosen duration of time. 
For a customer to make a booking, they need to enrol into the system by populating a form that registers their name, address, phone, password, email address, and credit card information (card number and expiry date) and unique customer ID. A registered customer can then add in details of their guests (i.e., those guests are described by their names and DoB and are unable to be uniquely identified without a customer ID), select the desired property for a defined date range and register their intent to rent the property by making a reservation (the reservation is tentative until the property manager has confirmed it). 

Each reservation a customer makes — of which there could be more than one, will be identifiable with a unique reservation number (R-id). Additionally, the OPBS allows the user to make special requests and calculate booking costs when the date range is encoded by the customer. There is only one property manager involved with the OPBS, and they can be described by ManagerID (unique), email, name and phone number. 

In addition to the aforementioned task of confirming reservation status, the property manager will create the bookings that will be available for customers to reserve and host guests. Once a property manager has approved the booking request after reviewing the customer, guest and reservation details, the customer is then able to make a payment and confirm the status of their reservation. 
Should the property manager decide against the proposed booking or should there be a conflict with the booking schedule, the property manager can reject the reservation. The customer is able to cancel their reservation at any point up until they make payment. After this point, there is a strict no refund policy. 

Following the approval of the reservation by the property manager, the customer will then be able to make a transaction. The transaction can be made online with a credit card or alternately, cash can be paid upon arrival. A unique transaction ID, timestamp and amount will describe the transaction and it will enable confirmation of the reservation. 

Given the confirmation, the property manager will adjust the reservation status accordingly. Each property is described by a cost and unique property ID. There are three different kinds of properties: 
• LuxuryVilla (with ensuite)
• Cabin (with its own hot tub)
• StarGazeTent (includes a private firepit) 

Each reservation must be managed by the property manager. Upon the completion of a short stay, the property manager will adjust the reservation status to indicate that the customers and their guests have checked out. Customers will be able to rate their stay at the property (with a unique rating id) by grading their experience on a scale from 1 to 5. 

Average feedback received from the customers for a property is to be considered the property’s overall rating, and it can be viewed by future customers to assist with their booking decisions. The OPBS mustn’t have any overlap between reservations in the same property. This issue is mitigated by enforcing the constraint that each combination of property ID and reservation date are to be unique. This is handled by enforcing a uniqueness constraint at the application level that ensures no two separate reservations can share the same Property ID with overlapping dates. In other words, this will prevent double bookings of any new booking for a particular Property ID which clashes with an existing booking for the same Property ID within its date range. 



![image](https://user-images.githubusercontent.com/31934083/182587482-3d6a909a-076b-417c-8d76-6f5349be5910.png)


### Platform 

<img width="1224" alt="image" src="https://user-images.githubusercontent.com/31934083/183371739-a4beb417-38a6-483c-9162-f54a3e6982e7.png">

Registration page for new customers. 


<img width="1224" alt="image" src="https://user-images.githubusercontent.com/31934083/183371863-6ad28720-02cf-4948-a783-e9accf93c9df.png">

Login Page for customers

![image](https://user-images.githubusercontent.com/31934083/182587482-3d6a909a-076b-417c-8d76-6f5349be5910.png)
