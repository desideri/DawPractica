# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Customers',
            fields=[
                ('customerid', models.CharField(max_length=5, serialize=False, primary_key=True, db_column='CustomerID')),
                ('companyname', models.CharField(max_length=40, db_column='CompanyName')),
                ('contactname', models.CharField(max_length=30, null=True, db_column='ContactName', blank=True)),
                ('contacttitle', models.CharField(max_length=30, null=True, db_column='ContactTitle', blank=True)),
                ('address', models.CharField(max_length=60, null=True, db_column='Address', blank=True)),
                ('city', models.CharField(max_length=15, null=True, db_column='City', blank=True)),
                ('region', models.CharField(max_length=15, null=True, db_column='Region', blank=True)),
                ('postalcode', models.CharField(max_length=10, null=True, db_column='PostalCode', blank=True)),
                ('country', models.CharField(max_length=15, null=True, db_column='Country', blank=True)),
                ('phone', models.CharField(max_length=24, null=True, db_column='Phone', blank=True)),
                ('fax', models.CharField(max_length=24, null=True, db_column='Fax', blank=True)),
            ],
            options={
                'db_table': 'customers',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Employees',
            fields=[
                ('employeeid', models.AutoField(serialize=False, primary_key=True, db_column='EmployeeID')),
                ('lastname', models.CharField(max_length=20, db_column='LastName')),
                ('firstname', models.CharField(max_length=10, db_column='FirstName')),
                ('title', models.CharField(max_length=30, null=True, db_column='Title', blank=True)),
                ('titleofcourtesy', models.CharField(max_length=25, null=True, db_column='TitleOfCourtesy', blank=True)),
                ('birthdate', models.DateTimeField(null=True, db_column='BirthDate', blank=True)),
                ('hiredate', models.DateTimeField(null=True, db_column='HireDate', blank=True)),
                ('address', models.CharField(max_length=60, null=True, db_column='Address', blank=True)),
                ('city', models.CharField(max_length=15, null=True, db_column='City', blank=True)),
                ('region', models.CharField(max_length=15, null=True, db_column='Region', blank=True)),
                ('postalcode', models.CharField(max_length=10, null=True, db_column='PostalCode', blank=True)),
                ('country', models.CharField(max_length=15, null=True, db_column='Country', blank=True)),
                ('homephone', models.CharField(max_length=24, null=True, db_column='HomePhone', blank=True)),
                ('extension', models.CharField(max_length=4, null=True, db_column='Extension', blank=True)),
                ('photo', models.TextField(null=True, db_column='Photo', blank=True)),
                ('notes', models.CharField(max_length=250, null=True, db_column='Notes', blank=True)),
                ('reportsto', models.IntegerField(null=True, db_column='ReportsTo', blank=True)),
                ('photopath', models.CharField(max_length=255, null=True, db_column='PhotoPath', blank=True)),
            ],
            options={
                'db_table': 'employees',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='OrderDetails',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('unitprice', models.FloatField(db_column='UnitPrice')),
                ('quantity', models.SmallIntegerField(db_column='Quantity')),
                ('discount', models.FloatField(db_column='Discount')),
            ],
            options={
                'db_table': 'order_details',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Orders',
            fields=[
                ('orderid', models.AutoField(serialize=False, primary_key=True, db_column='OrderID')),
                ('customerid', models.CharField(max_length=5, null=True, db_column='CustomerID', blank=True)),
                ('employeeid', models.IntegerField(null=True, db_column='EmployeeID', blank=True)),
                ('orderdate', models.CharField(max_length=50, null=True, db_column='OrderDate', blank=True)),
                ('requireddate', models.CharField(max_length=50, null=True, db_column='RequiredDate', blank=True)),
                ('shippeddate', models.CharField(max_length=50, null=True, db_column='ShippedDate', blank=True)),
                ('shipvia', models.IntegerField(null=True, db_column='ShipVia', blank=True)),
                ('freight', models.FloatField(null=True, db_column='Freight', blank=True)),
                ('shipname', models.CharField(max_length=40, null=True, db_column='ShipName', blank=True)),
                ('shipaddress', models.CharField(max_length=60, null=True, db_column='ShipAddress', blank=True)),
                ('shipcity', models.CharField(max_length=15, null=True, db_column='ShipCity', blank=True)),
                ('shipregion', models.CharField(max_length=15, null=True, db_column='ShipRegion', blank=True)),
                ('shippostalcode', models.CharField(max_length=10, null=True, db_column='ShipPostalCode', blank=True)),
                ('shipcountry', models.CharField(max_length=15, null=True, db_column='ShipCountry', blank=True)),
            ],
            options={
                'db_table': 'orders',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Products',
            fields=[
                ('productid', models.AutoField(serialize=False, primary_key=True, db_column='ProductID')),
                ('productname', models.CharField(max_length=40, db_column='ProductName')),
                ('supplierid', models.IntegerField(null=True, db_column='SupplierID', blank=True)),
                ('categoryid', models.IntegerField(null=True, db_column='CategoryID', blank=True)),
                ('quantityperunit', models.CharField(max_length=20, null=True, db_column='QuantityPerUnit', blank=True)),
                ('unitprice', models.FloatField(null=True, db_column='UnitPrice', blank=True)),
                ('unitsinstock', models.SmallIntegerField(null=True, db_column='UnitsInStock', blank=True)),
                ('unitsonorder', models.SmallIntegerField(null=True, db_column='UnitsOnOrder', blank=True)),
                ('reorderlevel', models.SmallIntegerField(null=True, db_column='ReorderLevel', blank=True)),
                ('discontinued', models.TextField(db_column='Discontinued')),
            ],
            options={
                'db_table': 'products',
                'managed': False,
            },
        ),
    ]
