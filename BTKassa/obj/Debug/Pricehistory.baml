   M S B A M L   `   `   `  ����B  >BTKassa, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null!clr-namespace:BTKassaBTKassa  5   	       BTKassa.Pricehistory   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   'localclr-namespace:BTKassa     5   	     � Title$  Pricehistory��5   	   $	��750��6   $	��800��6+    � 
ResizeMode$ NoResize=�67    � WindowStartupLocation$ CenterScreen=�6M   
�������.��5	      � ���	#FFABA9A9.+�5
   
   &   System.Windows.Controls.DataGrid  -   5          Name$ dgPrice��5
      $
��Left=�6$   $	��701��6?   $��	10,10,0,0q�6L   $	��Top=�6_   $	��500��6w      AutoGenerateColumns .     Columns 5      0  *System.Windows.Controls.DataGridTextColumn  5      ,  &System.Windows.Controls.DataGridColumn   Header$ Product Name��6i   1  +System.Windows.Controls.DataGridBoundColumn   Binding 6%   �� *product.name+   ClipboardContentBinding 6F   Z� 6i     5      $ Price��6b    6%   �� *price+ 6?   Z� 6b     5      $ 
Start Date��6f    6%   �� *	startdate+ 6C   Z� 6f     5      $ End Date��6d    6%   �� *	enddate+ 6A   Z� 6d   5      �� 5   
   $��Product��6   $
��Left=�6"   $��
516,10,0,0q�6=   $	��Top=�6Q   $��30��6i   $	��105��6u   
�������6�   �� 5   
   -   5        	 ��Name$	 	cbProduct��5      $
��Left=�6&   $��
626,10,0,0q�6A   $	��Top=�6U   $	��158��6m   $��30��6y   �� 5   
   $��Price��6   $
��Left=�6    $��
516,45,0,0q�6;   $	��Top=�6O   $��30��6g   $	��105��6s   
�������6   �� 5   
   $��	Startdate��6   $
��Left=�6$   $��
516,80,0,0q�6?   $	��Top=�6S   $��30��6k   $	��105��6w   
�������6�   �� 5   
   -   5        
 ��Name$
 txtPrice��5      $
��Left=�6$   $��30��6?   $��
625,45,0,0q�6K    �� TextWrapping$
 Wrap=�6_   $	��Top=�6s   $	��159��6�   �� 5   
   -   5         ��Name$ btnSave��5      $��Opslaan��6"   $
��Left=�64   $��516,225,0,0q�6O   $	��Top=�6d   $	��105��6|   $��31��6�   ���	#FFFFF6F66�   (  "System.Windows.Controls.DatePicker  5   
   -   5          Name$ dtStart��5      $
��Left=�6&   $��
626,80,0,0q�6A   $	��Top=�6U   $��30��6m   $	��158��6y   �� 5   
   -   5        $ 	btnReturn��5      $�� ��6$   $
��Left=�6/   $��717,645,0,0q�6J   $	��Top=�6_   $��70��6w   $��70��6�   ��6�   Z� ��6�   Z� ��5      �� 5       �� ImageSource$ TurnLeft-512.png��6   5      �� 5   
   $
��Left=�6   $	��246��6+   $��510,475,0,-0.2q�68   $	��Top=�6P   $	��201��6h   $��1537723600.png��6t    J� OpacityMask 5      �� 5       $ 1537723600.png��6   5"      �� 5#   
   $��Enddate��6   $
��Left=�6"   $��516,115,0,0q�6=   $	��Top=�6R   $��30��6j   $	��105��6v   
�������6�     5$   
   -   5        $ dtEnd��5$      $
��Left=�6$   $��626,115,0,0q�6?   $	��Top=�6T   $��30��6l   $	��158��6x   5&      5'      