# codeitup_team6
Hackathon – BadBoyz Project Proposal
NAME:  Hospital Wait List Lookup
Members: Cian Deely, Saoirse Deely, Mateusz Bober, Kennedy Akubueze

Name of your project: 	
The name of this project is :  Hospital Wait List Lookup

Description of business problem being solved/purpose of system:
The goal of this application is to create a web application that uses open data available on Data.Gov.ie to create a website that allows the user to input the particular type of treatment they need (radiology, paediatric, ect) and the website will analyse the data stored in a CSV file and display to the user the average waiting times for that department either per county or per hospital.

This website is extremely topical as at the moment there is a healthcare crisis with record number of patients being put on waiting lists for a bed and staying on trollies in the mean time. 

Target audience: 
•	Any member of the public who is in need of healthcare or have a family member who is in need of healthcare.
•	A member of staff in healthcare who need to analyse waiting times for counties/hospitals

Building Process


One laptop will build the frontend of the website using HTML and CSS with bootstrap providing the CSS for us. Simultaneously the other laptop will work on the backend of the website using PHP to create the data structure by reading in the CSV file from the Dava.Gov.ie website and creating data objects with this data.

We will be using XAMPP to provide hosting.

At a certain point then both sides will combine their efforts to implement the backend structure into the front end design and work on creating a fully working web application.

Prior to starting the design we will create a logical design of the architecture and a prototype of the website either on paper or a digital design. Both sides will then know what the web application will look like and can work simultaneously to create this design.







Challenges

•	Working with very large datasets: The CSV file from Data.Gov.ie that contains the relevant information we need is extremely large in size, so we will need to be extremely cautious in the way we implement this data as it is so large that the systems RAM may be used up in handling this data.

•	Working with multiple CSV files without creating redundant data.

•	Creating an object oriented design using PHP: As we are only second years and have only began studying PHP we will have to teach ourselves a lot of concepts as we are designing this. But we are an ambitious team and we are well capable of this.

•	As the CSV file contains hospital names but not the counties they are contained in we will have to find a way of assigning each hospital to its relevant county manually to create the County object.



Stretch Goals (will be met if we have additional time)
•	Add functionality so that the database will automatically update its data
•	Allow the user to select a certain year that they are interested in looking at
•	Possibility to save a search
•	Possibility to compare a countys data with another county or compare a hospitals data with another hospitals.






















Logical Architecture Diagram:

 


UML Class Diagram:


 
