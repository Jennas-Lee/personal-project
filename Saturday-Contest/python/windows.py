from PyQt5.QtCore import pyqtSlot, Qt
from PyQt5.QtWidgets import *
from PyQt5.QtGui import *
import random


class MyTable(QWidget):
    def __init__(self, parent=None):
        super().__init__(parent)

        self.table = QTableWidget(parent)
        self._mainwin = parent

        self.__make_table()

    def __make_table(self):
        # self.table.setSelectionBehavior(QTableView.SelectRows)  # multiple row 선택 가능
        self.table.setSelectionMode(QAbstractItemView.SingleSelection)

        # row, column 갯수 설정해야만 tablewidget 사용할수있다.
        self.table.setColumnCount(5)
        self.table.setRowCount(3)

        # column header 명 설정.
        self.table.setHorizontalHeaderLabels(["코드", "종목명"])
        self.table.horizontalHeaderItem(0).setToolTip("코드...")  # header tooltip
        self.table.horizontalHeaderItem(0).setTextAlignment(Qt.AlignRight)  # header 정렬 방식

        header_item = QTableWidgetItem("추가")
        header_item.setBackground(Qt.red)  # 헤더 배경색 설정 --> app.setStyle() 설정해야만 작동한다.
        self.table.setHorizontalHeaderItem(2, header_item)

        # cell 에 data 입력하기
        self.table.setItem(0, 0, QTableWidgetItem("000020"))
        self.table.setItem(0, 1, QTableWidgetItem("삼성전자"))
        self.table.setItem(1, 0, QTableWidgetItem("000030"))
        self.table.setItem(1, 1, QTableWidgetItem("현대차"))
        self.table.setItem(2, 0, QTableWidgetItem("000080"))
        item = QTableWidgetItem("기아차")
        self.table.setItem(2, 1, item)
        # self.table.resizeColumnsToContents()
        # self.table.resizeRowsToContents()

        self.table.setEditTriggers(QAbstractItemView.NoEditTriggers)  # edit 금지 모드

        # self.table.setCurrentCell(1, 1)  # current cell 위치 지정하기

        self.table.setColumnWidth(2, 50)
        ckbox = QCheckBox()
        self.table.setCellWidget(0, 2, ckbox)
        ckbox2 = QCheckBox('me')
        self.table.setCellWidget(1, 2, ckbox2)

        mycom = QComboBox()
        mycom.addItems(["aa", "dd", "kk"])
        mycom.addItem("cc")
        mycom.addItem("bb")
        self.table.setCellWidget(2, 2, mycom)

        item_widget = QPushButton("test")
        self.table.setCellWidget(1, 3, item_widget)


        self.table.cellClicked.connect(self.__mycell_clicked)
        mycom.currentTextChanged.connect(self.__mycom_text_changed)



class MyMain(QMainWindow):
    def __init__(self, parent=None):
        super().__init__(parent)
        table = MyTable(self)
        # table.setStyle(QStyleFactory.create('Fusion'))
        self.setCentralWidget(table)

        self.statusbar = self.statusBar()


if __name__ == "__main__":
    import sys

    app = QApplication(sys.argv)
    app.setStyle(QStyleFactory.create('Fusion'))  # --> 없으면, 헤더색 변경 안됨.

    # w = MyTable()
    w = MyMain()
    w.show()
    sys.exit(app.exec())
