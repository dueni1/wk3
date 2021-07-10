select * FROM customers;
select customersid, city FROM customers;
select distinct country from customers; this will select all the countries and make sure there are no duplicates
select count(distinct country)from customers; it will just count the number distiict countries;
select * from customers where country='mexico';
select * from customers where country=1; no quotation allowed
select * from customers where city LIKE 's%';
select * from customers where city IN ('paris','london');
select * form customers where country ="germany" AND city ="berlin";
select * form customers where city ="germany" OR city ="Munchen";
select * from customers where country!="germany";
select * from customers where country ='germany' and (city='berlin' OR city='munchen');
