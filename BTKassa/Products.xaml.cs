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
    /// Interaction logic for Products.xaml
    /// </summary>
    public partial class Products : Window
    {
        dcBTRDataContext db = new dcBTRDataContext();
        public Products()
        {
            InitializeComponent();
            SetData();
        }

        private void SetData()
        {
            dgProducts.ItemsSource = db.products.ToList();
            cbType.ItemsSource = db.producttypes.ToList();
            cbType.DisplayMemberPath = "type";
        }

        private void btnSave_Click(object sender, RoutedEventArgs e)
        {
            if (cbType.SelectedItem != null)
            {
                //Textbox uitlezen en opslaan in variable
                string sProductnaam = txtProductnaam.Text;
                //Combobox ui
                producttype myPT = (producttype)cbType.SelectedItem;
                //Nieuw product aanmaken
                product myProduct = new product();
                //Velden met variabele vullen
                myProduct.name = sProductnaam;
                myProduct.producttypeId = myPT.id;
                //Ready changes & changes uitvoeren
                db.products.InsertOnSubmit(myProduct);
                db.SubmitChanges();
                //Refresh database
                SetData();
                //Leegmaken en Confirmation
                txtProductnaam.Text = string.Empty;
                
                MessageBox.Show("Opgeslagen");
            }
            else
            {
                MessageBox.Show("Selecteer eerst een type");
            }
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            MainWindow wMainwindow = new MainWindow();
            wMainwindow.Show();
            this.Close();
        }
    }
}
