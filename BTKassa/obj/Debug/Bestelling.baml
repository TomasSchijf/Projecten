   M S B A M L   `   `   `  ����B  >BTKassa, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null!clr-namespace:BTKassaBTKassa  5   	       BTKassa.Bestelling   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   'localclr-namespace:BTKassa     5   	     � Title$  
Bestelling��5   	   $	��750��6   $	��800��6)    � 
ResizeMode$ NoResize=�65    � WindowStartupLocation$ CenterScreen=�6K   .��5	      � ���	#FFABA9A9.+�5
   
   &   System.Windows.Controls.DataGrid  -   5          Name$ dgBestelling��5
      $
��Left=�6)   $	��701��6D   $��	10,10,0,0q�6Q   $	��Top=�6d   $	��500��6|      AutoGenerateColumns .     Columns 5      0  *System.Windows.Controls.DataGridTextColumn  5      ,  &System.Windows.Controls.DataGridColumn   Header$ Customer ID��6m   1  +System.Windows.Controls.DataGridBoundColumn   Binding 6%   �� *order.customerId+   ClipboardContentBinding 6J   Z� 6m     5      $ 
First Name��6u   	   Width5  /System.Windows.Controls.DataGridLengthConverter$
	 Auto 6�    6%   �� *order.customer.firstname+ 6R   Z� 6�     5      $ 	Last Name��6t   $
	 Auto 6�    6%   �� *order.customer.lastname+ 6Q   Z� 6�     5      $ Product��6i   $
	 Auto 6z    6%   �� *product.name+ 6F   Z� 6z     5      $ Amount��6c    6%   �� *amount+ 6@   Z� 6c     5      $
 Date��6g    6%   �� *
order.date+ 6D   Z� 6g   5      �� 5   
   $��Customer��6   $
��Left=�6#   $��
515,10,0,0q�6>   $	��Top=�6R   $��30��6j   $	��105��6v   
�������6�   �� 5   
   -   5        
 ��Name$
 
cbCustomer��5      $
��Left=�6'   $��
625,10,0,0q�6B   $	��Top=�6V   $	��158��6n   $��30��6z   �� 5   
   $��Product Type��6   $
��Left=�6'   $��
515,45,0,0q�6B   $	��Top=�6V   $��30��6n   $	��105��6z   
�������6�   �� 5   
   -   5        $
 cbProductType��5      $
��Left=�6*   $��
625,45,0,0q�6E   $	��Top=�6Y   $	��158��6q   $��30��6}   6�   �� 5   
   $��Product��6   $
��Left=�6"   $��
515,80,0,0q�6=   $	��Top=�6Q   $��30��6i   $	��105��6u   
�������6�   �� 5   
   -   5        $
 	cbProduct��5      $
��Left=�6&   $��
625,80,0,0q�6A   $	��Top=�6U   $	��158��6m   $��30��6y    �� DisplayMemberPath$
 name��6�   �� 5   
   -   5         ��Name$ txtHoeveelheid��5      $
��Left=�6*   $��30��6E   $��624,115,0,0q�6Q    �� TextWrapping$
 Wrap=�6f   $	��Top=�6z   $	��159��6�   �� 5   
   $��Amount��6   $
��Left=�6!   $��515,115,0,0q�6<   $	��Top=�6Q   $��30��6i   $	��105��6u   
�������6�   �� 5   
   -   5         ��Name$ btnSaveOrder��5      $��Order Opslaan��6'   $
��Left=�6?   $��539,231,0,0q�6Z   $	��Top=�6o   $	��101��6�   $��32��6�   6�   �� 5   
   -   5        $ 	btnReturn��5      $�� ��6$   $
��Left=�6/   $��717,645,0,5.8q�6J   $��70��6a   ��6l   Z� ��6�   Z� ��5      �� 5       �� ImageSource$ TurnLeft-512.png��6   5!      �� 5"   
   $
��Left=�6   $	��246��6+   $��510,475,0,-0.2q�68   $	��Top=�6P   $	��201��6h   $��1537723600.png��6t    J� OpacityMask 5#      �� 5$      $ 1537723600.png��6   5&      5(      5)      