from django.urls import path
from . import views

urlpatterns = [
    path('', views.inicio, name='inicio'),
    path('nosotros', views.nosotros, name='nosotros'),
    path('libro',views.libro, name='libro'),
    path('libros/crear', views.crear, name='crear'),
    path('libros/editar', views.editar, name='editar')
]