from django.db import models
from django.contrib.auth.models import User

# Create your models here.
# This part of the User model is made for the 🎯http://localhost:8000/admin🎯 part, {:_-_|➡️It is being designed⬅️|_-_:}.
class User(models.Model):
    username = models.CharField(max_length=6, unique=True)
    password = models.CharField(max_length=12)

    def __str__(self):
        return self.username