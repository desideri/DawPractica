from django import forms
from web.models import Customers


class CustomersForm(forms.ModelForm):

   class Meta:
      model = Customers
