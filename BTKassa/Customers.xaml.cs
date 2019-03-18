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
    /// Interaction logic for Customers.xaml
    /// </summary>
    public partial class Customers : Window
    {
        dcBTRDataContext db = new dcBTRDataContext();
        public Customers()
        {
            InitializeComponent();
            SetData();
        }

        void SetData()
        {
            dgCustomers.ItemsSource = db.customers.ToList();
            
        }

        private void btnSave_Click(object sender, RoutedEventArgs e)
        {
            // TextBoxen uitlezen en opslaan in variable
            string sFirstname = txtFirstname.Text;
            string sLastname = txtLastname.Text;
            string sCity = txtCity.Text;
            string sPhonenumber = txtPhonenumber.Text;
            string sEmail = txtEmail.Text;
            // Customer aanmaken (new customer)
            customer myCustomer = new customer();
            // Velden van customer vullen met de variable
            myCustomer.firstname = sFirstname;
            myCustomer.lastname = sLastname;
            myCustomer.city = sCity;
            myCustomer.phonenumber = sPhonenumber;
            myCustomer.email = sEmail;
            // Customer klaar zetten om op te slaan
            db.customers.InsertOnSubmit(myCustomer);
            // Customer opslaan
            db.SubmitChanges();
            // Datagrid refeshen
            SetData();
            // Invoervelden leegmaken
            txtFirstname.Text = string.Empty;
            txtLastname.Text = string.Empty;
            txtCity.Text = string.Empty;
            txtPhonenumber.Text = string.Empty;
            txtEmail.Text = string.Empty;
            //Confirmation
            MessageBox.Show("Opgeslagen");
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            MainWindow wMainwindow = new MainWindow();
            wMainwindow.Show();
            this.Close();
        }
    }
}
