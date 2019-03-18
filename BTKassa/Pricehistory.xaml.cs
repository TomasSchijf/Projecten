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
    /// Interaction logic for Pricehistory.xaml
    /// </summary>
    public partial class Pricehistory : Window
    {
        dcBTRDataContext db = new dcBTRDataContext();
        public Pricehistory()
        {
            InitializeComponent();
            SetData();
        }
        private void SetData()
        {
            dgPrice.ItemsSource = db.pricehistories.ToList();
            cbProduct.ItemsSource = db.products.ToList();
            cbProduct.DisplayMemberPath = "name";
        }
        private void btnSave_Click(object sender, RoutedEventArgs e)
        {

            if (cbProduct.SelectedItem != null)
            {
                //product ophalen uit ComboBox en opslaan in 'myProduct'
                product myProduct = (product)cbProduct.SelectedItem;
                //Prijs ophalen bij product
                pricehistory myPH = (from ph in db.pricehistories
                                     where ph.productId == myProduct.id 
                                     /*&& ph.enddate == null*/
                                     select ph).FirstOrDefault();

                    //Dingen opslaan in variable
                    string sPrice = txtPrice.Text;
                    double iPrice = Convert.ToDouble(sPrice);
                    DateTime dtStartdate = dtStart.SelectedDate.Value;
                    DateTime dtEnddate = dtEnd.SelectedDate.Value;

                    //myPH.enddate = dtDate;
                    pricehistory myPrice = new pricehistory();
                    //Variable invullen

                    myPrice.productId = myProduct.id;
                    myPrice.price = (decimal) iPrice;
                    myPrice.startdate = dtStartdate;
                    myPrice.enddate = dtEnddate;
                    //Database klaarzetten en opslaan
                    db.pricehistories.InsertOnSubmit(myPrice);
                    db.SubmitChanges();
                    //Refresh Datagrid
                    SetData();

            }
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            MainWindow wMain = new MainWindow();
            wMain.Show();
            this.Close();
        }
    }
}
