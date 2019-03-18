using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace BTKassa
{
    /// <summary>
    /// Interaction logic for Bestelling.xaml
    /// </summary>
    public partial class Bestelling : Window
    {
        dcBTRDataContext db = new dcBTRDataContext();
        public Bestelling()
        {
            InitializeComponent();
            SetData();
        }

        private void SetData()
        {
            dgBestelling.ItemsSource = db.itemsinorders.ToList();
            
            cbCustomer.ItemsSource = db.customers.ToList();
            cbCustomer.DisplayMemberPath = "firstname";
            cbProductType.ItemsSource = db.producttypes.ToList();
            cbProductType.DisplayMemberPath = "type";
            cbProduct.ItemsSource = db.products.ToList();
            cbProduct.DisplayMemberPath = "name";
        }
        

        private void btnSaveOrder_Click(object sender, RoutedEventArgs e)
        {
            if (cbCustomer.SelectedItem != null)
            {
                //Combobox ui
                customer myCustomer = (customer)cbCustomer.SelectedItem;
                producttype myProductType = (producttype)cbProductType.SelectedItem;
                product myProduct = (product)cbProduct.SelectedItem;
                //Textbox uitlezen en opslaan in variable
                string sHoeveelheid = txtHoeveelheid.Text;
                int iHoeveelheid = Convert.ToInt32(sHoeveelheid);
                //Nieuw product aanmaken
                order myOrder = new order();
                itemsinorder myItemsInOrder = new itemsinorder();
                //Velden met variabele vullen
                myOrder.date = DateTime.Now;
                customer selCustomer = (customer)cbCustomer.SelectedItem;
                myOrder.customerId = selCustomer.id;

                db.orders.InsertOnSubmit(myOrder);
                db.SubmitChanges();

                myItemsInOrder.amount = iHoeveelheid;
                myItemsInOrder.orderId = myOrder.id;
                myItemsInOrder.productId = myProduct.id;

                //Ready changes & changes uitvoeren
                
                db.itemsinorders.InsertOnSubmit(myItemsInOrder);
                db.SubmitChanges();
                //Refresh database
                SetData();

                //Confirmation
                MessageBox.Show("Opgeslagen");
            }
            else
            {
                MessageBox.Show("Selecteer eerst een type");
            }

        }

        private void cbProductType_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            producttype myProductType = (producttype)cbProductType.SelectedItem;
            List<product> myProducts = (
                from s in db.products
                where s.producttypeId == myProductType.id
                select s).ToList();
            // ItemsSource van de DataGrid en ComboBox zetten aan de hand van de zojuist gemaakte lijst
            cbProduct.ItemsSource = myProducts;
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            MainWindow wMainwindow = new MainWindow();
            wMainwindow.Show();
            this.Close();
        }

        private void dgBestelling_SelectionChanged()
        {

        }
    }
}
