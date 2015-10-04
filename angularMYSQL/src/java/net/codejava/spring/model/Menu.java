/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigInteger;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Menu.findAll", query = "SELECT m FROM Menu m")})
public class Menu implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "pk_menu")
    private Long pkMenu;
    private String accion;
    private String descripcion;
    private BigInteger estado;
    private BigInteger menu;
    private String metodo;
    private BigInteger modulo;
    private BigInteger sistema;
    private String titulo;

    public Menu() {
    }

    public Menu(Long pkMenu) {
        this.pkMenu = pkMenu;
    }

    public Long getPkMenu() {
        return pkMenu;
    }

    public void setPkMenu(Long pkMenu) {
        this.pkMenu = pkMenu;
    }

    public String getAccion() {
        return accion;
    }

    public void setAccion(String accion) {
        this.accion = accion;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public BigInteger getEstado() {
        return estado;
    }

    public void setEstado(BigInteger estado) {
        this.estado = estado;
    }

    public BigInteger getMenu() {
        return menu;
    }

    public void setMenu(BigInteger menu) {
        this.menu = menu;
    }

    public String getMetodo() {
        return metodo;
    }

    public void setMetodo(String metodo) {
        this.metodo = metodo;
    }

    public BigInteger getModulo() {
        return modulo;
    }

    public void setModulo(BigInteger modulo) {
        this.modulo = modulo;
    }

    public BigInteger getSistema() {
        return sistema;
    }

    public void setSistema(BigInteger sistema) {
        this.sistema = sistema;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (pkMenu != null ? pkMenu.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Menu)) {
            return false;
        }
        Menu other = (Menu) object;
        if ((this.pkMenu == null && other.pkMenu != null) || (this.pkMenu != null && !this.pkMenu.equals(other.pkMenu))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Menu[ pkMenu=" + pkMenu + " ]";
    }
    
}
