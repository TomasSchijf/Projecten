   M S B A M L   `   `   `  ����B  >BTKassa, Version=1.0.0.0, Culture=neutral, PublicKeyToken=null!clr-namespace:BTKassaBTKassa  5   	       BTKassa.Products   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   'localclr-namespace:BTKassa     5   	     � Title$  Products��5   	   $	��750��6   $	��800��6'    � 
ResizeMode$ NoResize=�63    � WindowStartupLocation$ CenterScreen=�6I   .��5	      � ���	#FFABA9A9.+�5
   
   &   System.Windows.Controls.DataGrid  -   5          Name$ 
dgProducts��5
      $
��Left=�6'   $	��701��6B   $��	10,10,0,0q�6O   $	��Top=�6b   $	��500��6z      AutoGenerateColumns .     Columns 5      0  *System.Windows.Controls.DataGridTextColumn  5      ,  &System.Windows.Controls.DataGridColumn   Header$ 
Product ID��6_   1  +System.Windows.Controls.DataGridBoundColumn   Binding 6%   �� *id+   ClipboardContentBinding 6<   Z� 6_     5      $ Product Name��6a    6%   �� *name+ 6>   Z� 6a     5      $ Product Type��6m    6%   �� *producttype.type+ 6J   Z� 6m     5      $ Price��6o    6%   �� *pricehistory.price+ 6L   Z� 6o   5      �� 5   
   -   5        	 ��Name$	 txtProductnaam��5      $
��Left=�6*   $��30��6E   $��
624,10,0,0q�6Q   
 �� TextWrapping$

 Wrap=�6e   $	��Top=�6y   $	��159��6�   �� 5   
   -   5         ��Name$ btnSave��5      $��Opslaan��6"   $
��Left=�64   $��515,206,0,0q�6O   $	��Top=�6d   $	��105��6|   $��31��6�   ���	#FFFFF6F66�   �� 5   
   $��Productnaam��6   $
��Left=�6&   $��
515,10,0,0q�6A   $	��Top=�6U   $��30��6m   $	��105��6y   
�������6�   �� 5   
   $
��Type��6   $
��Left=�6   $��
515,45,0,0q�6:   $	��Top=�6N   $��30��6f   $	��105��6r   
�������6~   �� 5   
   -   5         ��Name$ cbType��5      $
��Left=�6#   $��
625,45,0,0q�6>   $	��Top=�6R   $	��158��6j   $��30��6v   �� 5   
   -   5        $ 	btnReturn��5      $�� ��6$   $
��Left=�6/   $��717,645,0,5.8q�6J   $��70��6a   ��6l   Z� ��6�   Z� ��5      �� 5       �� ImageSource$ TurnLeft-512.png��6   5      �� 5   
   $
��Left=�6   $	��246��6+   $��510,475,0,-0.2q�68   $	��Top=�6P   $	��201��6h   $��1537723600.png��6t    J� OpacityMask 5      �� 5      $ 1537723600.png��6   5       5"      5#      