﻿using System;
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

namespace Rekenspelv2._0
{
    /// <summary>
    /// Interaction logic for Aantalgoedscherm.xaml
    /// </summary>
    public partial class Aantalgoedscherm : Window
    {
        
        public Aantalgoedscherm(int goed)
        {
            InitializeComponent();

            lblGoede.Content = goed.ToString();
        }

        private void btnReturn_Click(object sender, RoutedEventArgs e)
        {
            MainWindow main = new MainWindow();
            main.Show();
            this.Close();
        }
    }
}
