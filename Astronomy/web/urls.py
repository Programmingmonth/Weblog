from django.urls import path
from . import views
from .views import simple_post_view

urlpatterns = [
    path('', views.index, name='index'),
    path('next/', views.next_page, name='next_page'),
    path('next2/', views.next_page_2, name='next_page_2'),
    path('imagea/', views.imagea_page, name='imagea_page'),
    path('api/post/', simple_post_view, name='simple_post_view'),
    path('Description/', views.Description, name='Description')
]
