   M S B A M L   `   `   `  ����B  >BTKassa, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null!clr-namespace:BTKassaBTKassa  5   	       BTKassa.Customers   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   'localclr-namespace:BTKassa     5   	     � Title$  	Customers��5   	   $	��750��6   $	��800��6(    � WindowStartupLocation$ CenterScreen=�64    � 
ResizeMode$ NoResize=�6Y   .��5	      � ���	#FFABA9A9.+�5
   
   &   System.Windows.Controls.DataGrid  -   5          Name$ dgCustomers��5
      $
��Left=�6(   $	��701��6C   $��	10,10,0,0q�6P   $	��Top=�6c   $	��500��6{   �� 5   
   -   5         ��Name$ txtFirstname��5      $
��Left=�6(   $��30��6C   $��
624,10,0,0q�6O    �� TextWrapping$
 Wrap=�6c   $	��Top=�6w   $	��159��6�   �� 5   
   -   5        $ txtLastname��5      $
��Left=�6'   $��30��6B   $��
624,45,0,0q�6N   $
 Wrap=�6b   $	��Top=�6v   $	��159��6�   �� 5   
   -   5        $ txtCity��5      $
��Left=�6#   $��30��6>   $��
624,80,0,0q�6J   $
 Wrap=�6^   $	��Top=�6r   $	��159��6�   �� 5   
   -   5         ��Name$ btnSave��5      $��Opslaan��6"   $
��Left=�64   $��515,206,0,0q�6O   $	��Top=�6d   $	��105��6|   $��31��6�   ���	#FFFFF6F66�   �� 5   
   -   5        $ txtPhonenumber��5      $
��Left=�6*   $��30��6E   $��624,115,0,0q�6Q   $
 Wrap=�6f   $	��Top=�6z   $	��159��6�   �� 5   
   -   5        $ txtEmail��5      $
��Left=�6$   $��30��6?   $��624,150,0,0q�6K   $
 Wrap=�6`   $	��Top=�6t   $	��159��6�   �� 5   
   $��Voornaam��6   $
��Left=�6#   $��
515,10,0,0q�6>   $	��Top=�6R   $��30��6j   $	��105��6v   
�������6�   �� 5   
   $��
Achternaam��6   $
��Left=�6%   $��
515,45,0,0q�6@   $	��Top=�6T   $��30��6l   $	��105��6x   
�������6�   �� 5   
   $��
Woonplaats��6   $
��Left=�6%   $��
515,80,0,0q�6@   $	��Top=�6T   $��30��6l   $	��105��6x   
�������6�   �� 5   
   $��Telefoonnummer��6   $
��Left=�6)   $��515,115,0,0q�6D   $	��Top=�6Y   $��30��6q   $	��105��6}   
�������6�   �� 5   
   $��E-mail adres��6   $
��Left=�6'   $��515,150,0,0q�6B   $	��Top=�6W   $��30��6o   $	��105��6{   
�������6�   �� 5   
   -   5        $�� ��5      $
��Left=�6   $��717,645,0,0q�67   $	��Top=�6L   $��70��6d   $��70��6o   ��6{   Z� ��6�   Z� ��5      �� 5       �� ImageSource$ TurnLeft-512.png��6   5      �� 5   
   $
��Left=�6   $	��246��6+   $��510,475,0,-0.2q�68   $	��Top=�6P   $	��201��6h   $��1537723600.png��6t    J� OpacityMask 5      �� 5      $ 1537723600.png��6   5      5!      5"      