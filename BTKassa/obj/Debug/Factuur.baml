   M S B A M L   `   `   `  ����B  >BTKassa, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null!clr-namespace:BTKassaBTKassa  5   	       BTKassa.Factuur   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   'localclr-namespace:BTKassa     5   	     � Title$  Factuur��5   	   $	��750��6   $	��800��6&   ���	#FFABA9A9 � 
ResizeMode$ NoResize=�6I    � WindowStartupLocation$ CenterScreen=�6_   .��5	      � .+�5
   
   �� -   5         ��Name$ 	btnReturn��5
      $�� ��6$   $
��Left=�6/   $��717,645,0,5.8q�6J   $��70��6a   ��6l   Z� ��6�   Z� ��5      �� 5       �� ImageSource$ TurnLeft-512.png��6   5      �� 5   
   $
��Left=�6   $	��246��6+   $��510,475,0,-0.2q�68   $	��Top=�6P   $	��201��6h   $��1537723600.png��6t    J� OpacityMask 5      �� 5      $ 1537723600.png��6   5      &   System.Windows.Controls.DataGrid  5   
   -   5          Name$ 	dgFactuur��5      $
��Left=�6&   $	��701��6A   $��	10,10,0,0q�6N   $	��Top=�6a   $	��500��6y      AutoGenerateColumns .     Columns 5      0  *System.Windows.Controls.DataGridTextColumn  5      ,  &System.Windows.Controls.DataGridColumn	   Header$	 Customer ID��6m   1  +System.Windows.Controls.DataGridBoundColumn
   Binding
 6%   �� *order.customerId+   ClipboardContentBinding 6J   Z� 6m     5      $	 
First Name��6u   
 6%   �� *order.customer.firstname+ 6R   Z� 6u     5      $	 	Last Name��6t   
 6%   �� *order.customer.lastname+ 6Q   Z� 6t     5      $	 Product��6i   
 6%   �� *product.name+ 6F   Z� 6i     5      $	 Amount��6c   
 6%   �� *amount+ 6@   Z� 6c     5      $	 Price��6w   
 6%   �� *product.pricehistory.price+ 6T   Z� 6w   5      �� 5   
   $��Customer��6   $
��Left=�6#   $��
516,10,0,0q�6>   $	��Top=�6R   $��30��6j   $	��105��6v   
�������6�   �� 5   
   -   5         ��Name$ 
cbCustomer��5      $
��Left=�6'   $��
626,10,0,0q�6B   $	��Top=�6V   $	��158��6n   $��30��6z   6�   5!      5"      